<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    //variables que s eutilizarán
    use WithPagination;
    public $post_id, $title, $body;
    public $view = 'create';
    public function render()
    {
        $posts = Post::all();
        // return view('livewire.post-component',compact('posts'));

        return view('livewire.post-component',[
            'posts'=>Post::orderBy('id','desc')->paginate(8)
        ]);
    }

    // función de registrar
    public function store(){
        $this->validate([
            'title'=> 'required',
            'body' =>'required'
        ]);

        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->edit($post->id);

    }
    // función de ir a edit

    public function edit($id){
        $post = Post::find($id);
        $this->post_id = $post->id;
        $this->title   = $post->title;
        $this->body    = $post->body;
        //escribe la vista a observar
        $this->view = 'edit';
    }

    // función de actualziar datos

    public function update(){
        $this->validate([
            'title'=> 'required',
            'body' =>'required'
        ]);

        $post= Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->default();
    }



    public function default(){
        $this->title = "";
        $this->body  = "";
        $this->view  = 'create';

    }
    // función de eliminar
    public function destroy($id){
        Post::destroy($id);

    }

}
