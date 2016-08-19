<?php

namespace CmsBundle\Entity;

/**
 * TbPages
 */
class TbPages
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $note;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var string
     */
    private $access;

    /**
     * @var string
     */
    private $allowGuest = '0';

    /**
     * @var string
     */
    private $template = 'frontend';

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $contents;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var integer
     */
    private $pageid;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return TbPages
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return TbPages
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return TbPages
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set created
     *
     * @param integer $created
     *
     * @return TbPages
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return TbPages
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return TbPages
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return TbPages
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set access
     *
     * @param string $access
     *
     * @return TbPages
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Get access
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set allowGuest
     *
     * @param string $allowGuest
     *
     * @return TbPages
     */
    public function setAllowGuest($allowGuest)
    {
        $this->allowGuest = $allowGuest;

        return $this;
    }

    /**
     * Get allowGuest
     *
     * @return string
     */
    public function getAllowGuest()
    {
        return $this->allowGuest;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return TbPages
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return TbPages
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set contents
     *
     * @param string $contents
     *
     * @return TbPages
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return TbPages
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Get pageid
     *
     * @return integer
     */
    public function getPageid()
    {
        return $this->pageid;
    }
}

