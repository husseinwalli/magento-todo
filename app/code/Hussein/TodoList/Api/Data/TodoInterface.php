<?php
namespace Hussein\TodoList\Api\Data;


interface TodoInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const TODO_ID       = 'todo_id';
    const URL_KEY       = 'url_key';
    const TEXT         = 'text';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_COMPLETE     = 'is_complete';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getUrlKey();

    /**
     * Get text
     *
     * @return string|null
     */
    public function getText();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * isComplete
     *
     * @return bool|null
     */
    public function isComplete();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Hussein\TodoList\Api\Data\TodoInterface
     */
    public function setId($id);

    /**
     * Set URL Key
     *
     * @param string $url_key
     * @return \Hussein\TodoList\Api\Data\TodoInterface
     */
    public function setUrlKey($url_key);

    /**
     * Set title
     *
     * @param string $title
     * @return \Hussein\TodoList\Api\Data\TodoInterface
     */
    public function setText($text);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Hussein\TodoList\Api\Data\TodoInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Hussein\TodoList\Api\Data\TodoInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is complete
     *
     * @param int|bool $isComplete
     * @return \Hussein\TodoList\Api\Data\TodoInterface
     */
    public function setIsComplete($isComplete);
}