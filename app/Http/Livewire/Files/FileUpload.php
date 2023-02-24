<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

class FileUpload extends Component
{
    // public function render()
    // {
    //     return view('livewire.files.file-upload');
    // }

    use WithFileUploads;

    public $posts, $file, $title;
    public $updateMode = false;
  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function submit()

    {

        $validatedData = $this->validate([

            'title' => 'required',

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $validatedData['name'] = $this->file->store('files', 'public');

  

        File::create($validatedData);

  

        session()->flash('message', 'Image successfully Uploaded.');

    }

  

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

     public function edit($id)

     {
 
         $post = File::findOrFail($id);
 
        //  $this->post_id = $id;
 
         $this->title = $post->title;
 
         $this->file = $post->name;
 
   
 
         $this->updateMode = true;
 
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
 
             'name' => 'required',
 
         ]);
 
   
 
         $post = File::find($this->id);
 
         $post->update([
 
             'title' => $this->title,
 
             'name' => $this->name,
 
         ]);
 
   
 
         $this->updateMode = false;
 
   
 
         session()->flash('message', 'Post Updated Successfully.');
 
         $this->resetInputFields();
 
     }
 

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function render()

    {
        $this->posts = File::all();
        // return view('livewire.files.posts');
        return view('livewire.files.file-upload');

    }

}
