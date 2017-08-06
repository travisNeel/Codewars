function duck_duck_goose($players, $goose) {
    $size = ($goose-1)%count($players);
    return $players[$size]['name'];
}
