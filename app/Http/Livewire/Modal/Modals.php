<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Modal;

class Modals extends Component
{
    // public function render()
    // {
    //     return view('livewire.modal.modals');
    // }

    public $posts, $title, $body, $post_id;

    public $isOpen = 0;

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function render()

    {

        $this->posts = Modal::all();

        return view('livewire.modal.posts');

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function create()

    {

        $this->resetInputFields();

        $this->openModal();

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function openModal()

    {

        $this->isOpen = true;

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function closeModal()

    {

        $this->isOpen = false;

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    private function resetInputFields(){

        $this->title = '';

        $this->body = '';

        $this->post_id = '';

    }

     

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function store()

    {

        $this->validate([

            'title' => 'required',

            'body' => 'required',

        ]);

   

        Modal::updateOrCreate(['id' => $this->post_id], [

            'title' => $this->title,

            'body' => $this->body

        ]);

  

        session()->flash('message', 

            $this->post_id ? 'Modal Updated Successfully.' : 'Modal Created Successfully.');

  

        $this->closeModal();

        $this->resetInputFields();

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function edit($id)

    {

        $post = Modal::findOrFail($id);

        $this->post_id = $id;

        $this->title = $post->title;

        $this->body = $post->body;

    

        $this->openModal();

    }

     

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function delete($id)

    {

        Modal::find($id)->delete();

        session()->flash('message', 'Modal Deleted Successfully.');

    }


}
