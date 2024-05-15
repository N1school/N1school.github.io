<?php

namespace App\Admin\Forms;

use Encore\Admin\Form;
use Illuminate\Http\Request;

class News extends Form
{
    /**
     * The form title.
     *
     * @var string
     */
    public $title = 'News';

    /**
     * Handle the form request.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'required|string',
            'created_at' => 'nullable|date',
        ]);

        News::create($validatedData);

        admin_success('News added successfully!');

        return back();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('title', 'Title')->rules('required');
        $this->textarea('description', 'Description')->rules('required');
        $this->text('image_path', 'Image Path')->rules('required');
        $this->datetime('created_at', 'Created At')->nullable();
    }
}
