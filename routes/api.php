<?php

Route::get('/notes', function() {
	$notes=\App\Models\Note::all()->toArray();
	return response()->json($notes);
});