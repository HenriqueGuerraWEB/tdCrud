<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comissao;

class Comissoes extends Component
{
    // public function render()
    // {
    //     return view('livewire.comissoes');
    // }


    public $posts, $title, $body, $post_id;

    public $updateMode = false;

   

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function render()

    {

        $this->posts = Comissao::all();

        return view('livewire.posts');

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    private function resetInputFields(){

        $this->title = '';

        $this->body = '';

    }

   

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function store()

    {

        $validatedDate = $this->validate([

            'title' => 'required',

            'body' => 'required',

        ]);

  

        Comissao::create($validatedDate);

  

        session()->flash('message', 'Post Created Successfully.');

  

        $this->resetInputFields();

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function edit($id)

    {

        $post = Comissao::findOrFail($id);

        $this->post_id = $id;

        $this->title = $post->title;

        $this->body = $post->body;

  

        $this->updateMode = true;

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function cancel()

    {

        $this->updateMode = false;

        $this->resetInputFields();

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function update()

    {

        $validatedDate = $this->validate([

            'title' => 'required',

            'body' => 'required',

        ]);

  

        $post = Comissao::find($this->post_id);

        $post->update([

            'title' => $this->title,

            'body' => $this->body,

        ]);

  

        $this->updateMode = false;

  

        session()->flash('message', 'Post Updated Successfully.');

        $this->resetInputFields();

    }

   

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function delete($id)

    {

        Comissao::find($id)->delete();

        session()->flash('message', 'Post Deleted Successfully.');

    }


}
