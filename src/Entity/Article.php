<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
  * @ORM\Table(name="Article",uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", fields={"title"})})
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
   private int $id;

   /**
     * @ORM\Column(name="title", type="string")
     */
   private string $title;

   /**
     * @ORM\Column(name="resume", type="string")
     */
   private string $resume;

   /**
     * @ORM\Column(name="author", type="string")
     */
   private string $author;

   /**
     * @ORM\Column(name="editor", type="string")
     */
   private string $editor;

   /**
     * @ORM\Column(name="ISBN", type="integer")
     */
   private int $isbnNum;

   /**
     * @ORM\Column(name="note", type="integer")
     */
   private int $note;

    /**
     * @ORM\Column(name="comments", type="string")
     */
   private string $comments;


   public function __construct(string $title, string $resume, string $author, string $editor, int $isbnNum, int $note)
   {
       $this->title =$title;
       $this->resume = $resume;
       $this->author = $author;
       $this->editor = $editor;
       $this->isbnNum = $isbnNum;
       $this->note = $note;
   }

   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Get the value of title
    */ 
   public function getTitle() :string
   {
      return $this->title;
   }

   /**
    * Set the value of title
    *
    * @return  self
    */ 
   public function setTitle(string $title) : self
   {
      $this->title = $title;

      return $this;
   }

   /**
    * Get the value of resume
    */ 
   public function getResume() : string
   {
      return $this->resume;
   }

   /**
    * Set the value of resume
    *
    * @return  self
    */ 
   public function setResume(string $resume)
   {
      $this->resume = $resume;

      return $this;
   }

   /**
    * Get the value of author
    */ 
   public function getAuthor() : string
   {
      return $this->author;
   }

   /**
    * Set the value of author
    *
    * @return  self
    */ 
   public function setAuthor(string $author) :self
   {
      $this->author = $author;

      return $this;
   }

   /**
    * Get the value of editor
    */ 
   public function getEditor() : string
   {
      return $this->editor;
   }

   /**
    * Set the value of editor
    *
    * @return  self
    */ 
   public function setEditor(string $editor) : self
   {
      $this->editor = $editor;

      return $this;
   }

   /**
    * Get the value of isbnNum
    */ 
   public function getIsbnNum() : int
   {
      return $this->isbnNum;
   }

   /**
    * Set the value of isbnNum
    *
    * @return  self
    */ 
   public function setIsbnNum(int $isbnNum) : self
   {
      $this->isbnNum = $isbnNum;

      return $this;
   }

   /**
    * Get the value of note
    */ 
   public function getNote() : int
   {
      return $this->note;
   }

   /**
    * Set the value of note
    *
    * @return  self
    */ 
   public function setNote(int $note) : self
   {
      $this->note = $note;

      return $this;
   }

   /**
    * Get the value of comments
    */ 
   public function getComments() : string
   {
      return $this->comments;
   }

   /**
    * Set the value of comments
    *
    * @return  self
    */ 
   public function setComments(string $comments) : self
   {
      $this->comments = $comments;

      return $this;
   }
}
