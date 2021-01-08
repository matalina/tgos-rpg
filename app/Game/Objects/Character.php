<?php
namespace Game\Objects;

use App\Models\Game\Character as GameCharacter;

class Character extends GameObject
{
    public function get(int $id): Character
    {
        $character = GameCharacter::find($id);

        $this->model = $character;

        return $this;
    }

    public function set(array $character): Character 
    {
        $char = GameCharacter::create([
            'name' => $character['name'],
            'user_id' => $character['user_id'],
        ]);

        $this->model = $char;

        return $this;
    }
}
