<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    #[Session(key: 'search')] 
    public $search = '';

    public function pokemons() 
    {
        $result = [];
        foreach($this->pokemons as $pokemon) {
            // if (str_contains($pokemon['name']['english'], $this->search)) {
            if (preg_match('/'.$this->search.'/i', $pokemon['name']['english'])) {
                $result[] = $pokemon; 
            }
        }
        return $this->search === '' ? $this->pokemons : $result;
    }
    
    public function render()
    {
        $json = file_get_contents(base_path('public/assets/pokedex.json'));
        $this->pokemons =  json_decode($json, true);
        return view('livewire.create-post', [
            'pokemons' => $this->pokemons(),
            'search' => $this->search,
        ]);
    }
}
