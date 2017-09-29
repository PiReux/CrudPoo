<?php


namespace wilder;
class Article
{
    /*** @var int */
private $id;
    /**
     * @var string
     */
private $title;
    /**
     * @var string
     */
private $text;
    /**
     * @var string
     */
private $autor;

    /**
     * Article constructor.
     * @param int $id
     * @param string $title
     * @param string $text
     * @param string $autor
     */
    public function __construct($title, $text, $autor)
    {
        $this->title = $title;
        $this->text = $text;
        $this->autor = $autor;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getAutor(): string
    {
        return $this->autor;
    }

    /**
     * @param string $autor
     */
    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }


}