<div>
    <h1>Title: "{{ $title }}"</h1>
    <h1>Search: "{{ $search }}"</h1>
    <input type="text" wire:model="search" placeholder="Search pokemon..."> 
    <button type="button" wire:click="$refresh">Search</button>
    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($pokemons as $pokemon)
        <tr wire:key="{{ $pokemon['id'] }}"> 
            <td>{{ $pokemon['id'] }}</td>
            <td>{{ $pokemon['name']['english'] }}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
    
</div>