<?php
namespace Hussein\TodoList\Model;

use Hussein\TodoList\Api\Data\TodoInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Todo extends \Magento\Framework\Model\AbstractModel implements PostInterface, IdentityInterface
{

    /**
     * @var string
     */
    protected $_cacheTag = 'todo_list';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'todo_list';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Hussein\TodoList\Model\ResourceModel\Todo');
    }

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