<?php
Route::get('test/data', function () {
    return response()->json(['message' => 'Hello, World!']);
});
