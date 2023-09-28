<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

use App\Models\User;

#[Title('User Page')]
class UserPage extends Component
{
	public User $user;

	/* You can remove this method 
	 * if your component name is already same with your livewire blade
	 * such as default. 
    public function render()
    {
        //return view('livewire.user-page')->title('User Page'); // dynamicly give title
        //return view('livewire.user-page')->layout('layout.app'); // dynamicly setting layout or you can setting it globally on config/livewire.php
        return view('livewire.user-page');
    }
	*/
}
