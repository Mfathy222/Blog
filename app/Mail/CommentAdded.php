<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CommentAdded extends Mailable
{
    use Queueable, SerializesModels;

    public $comment;
    public $post;

    /**
     * Create a new message instance.
     */
    public function __construct(Comment $comment,Post $post)
    {
       $data=$this->comment = $comment;
       $data= $this->post = $comment->post;
       $data= $this->post= $post;
       $email=$data;
    }
    
    public function build()
    {
        return $this->subject('New Comment on Your Post')
                    ->view('comment_added');
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Post Or Comment Added',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'comment_added',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
