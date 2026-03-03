<?php

namespace App\Http\Controllers;

use App\Models\NewsComment;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            NewsComment::with(['news', 'userProfile.user'])->latest()->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'news_id' => ['required', 'exists:news,id'],
            'comment' => ['required', 'string', 'max:1000'],
        ]);

        $profile = UserProfile::where('user_id', $request->user()->id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        $newsComment = NewsComment::create([
            'news_id' => $data['news_id'],
            'user_id' => $profile->id,
            'likes' => 0,
            'comment' => $data['comment'],
        ]);

        return response()->json($newsComment->load(['news', 'userProfile.user']), 201);
    }

    public function storeByNews(Request $request, int $newsId)
    {
        $data = $request->validate([
            'comment' => ['required', 'string', 'max:1000'],
        ]);

        $profile = UserProfile::where('user_id', $request->user()->id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        $newsComment = NewsComment::create([
            'news_id' => $newsId,
            'user_id' => $profile->id,
            'likes' => 0,
            'comment' => $data['comment'],
        ]);

        return response()->json($newsComment->load(['news', 'userProfile.user']), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsComment $newsComment)
    {
        return response()->json($newsComment->load(['news', 'userProfile.user']));
    }

    public function findByNewsId(int $newsId)
    {
        $comments = NewsComment::with(['news', 'userProfile.user'])
            ->where('news_id', $newsId)
            ->latest()
            ->get();

        return response()->json($comments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsComment $newsComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsComment $newsComment)
    {
        $profile = UserProfile::where('user_id', $request->user()->id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        if ((int) $newsComment->user_id !== (int) $profile->id) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $data = $request->validate([
            'comment' => ['required', 'string', 'max:1000'],
        ]);

        $newsComment->update([
            'comment' => $data['comment'],
        ]);

        return response()->json($newsComment->fresh()->load(['news', 'userProfile.user']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsComment $newsComment)
    {
        $profile = UserProfile::where('user_id', request()->user()->id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        if ((int) $newsComment->user_id !== (int) $profile->id) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $newsComment->delete();

        return response()->json(['message' => 'Comentario eliminado'], 200);
    }

    public function like(NewsComment $newsComment)
    {
        $profile = UserProfile::where('user_id', request()->user()->id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        $alreadyLiked = $newsComment->likedByUsers()
            ->where('user_profile_id', $profile->id)
            ->exists();

        if ($alreadyLiked) {
            return response()->json([
                'message' => 'Ya diste like a este comentario',
                'likes' => $newsComment->likes,
            ], 409);
        }

        $likes = DB::transaction(function () use ($newsComment, $profile) {
            $newsComment->likedByUsers()->attach($profile->id);

            $currentLikes = $newsComment->likedByUsers()->count();
            $newsComment->update(['likes' => $currentLikes]);

            return $currentLikes;
        });

        return response()->json([
            'message' => 'Like añadido',
            'likes' => $likes,
        ], 200);
    }

    public function unlike(NewsComment $newsComment)
    {
        $profile = UserProfile::where('user_id', request()->user()->id)->first();

        if (!$profile) {
            return response()->json(['message' => 'Perfil no encontrado'], 404);
        }

        $alreadyLiked = $newsComment->likedByUsers()
            ->where('user_profile_id', $profile->id)
            ->exists();

        if (!$alreadyLiked) {
            return response()->json([
                'message' => 'No habías dado like a este comentario',
                'likes' => $newsComment->likes,
            ], 409);
        }

        $likes = DB::transaction(function () use ($newsComment, $profile) {
            $newsComment->likedByUsers()->detach($profile->id);

            $currentLikes = $newsComment->likedByUsers()->count();
            $newsComment->update(['likes' => $currentLikes]);

            return $currentLikes;
        });

        return response()->json([
            'message' => 'Like quitado',
            'likes' => $likes,
        ], 200);
    }
}
