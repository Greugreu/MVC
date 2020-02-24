<?php

namespace App\Model;

use App\Weblitzer\Model;
use App\App;

/**
 *
 */

class FruitModel extends Model
{
    protected static $table = 'fruits';

    protected $id;
    protected $title;
    protected $content;
    protected $created_at;
    protected $modified_at;

    public static function insertFruit($title, $content)
    {
        return App::getDatabase()->prepare("INSERT INTO " . self::getTable() . " VALUES(NULL, ?, ?, NOW())",
            [$title,
            $content],get_called_class(), true);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($date): void
    {
        $this->created_at = $date;
    }

    /**
     * @return mixed
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * @param mixed $modified_at
     */
    public function setModifiedAt($date): void
    {
        $this->modified_at = $date;
    }

}
