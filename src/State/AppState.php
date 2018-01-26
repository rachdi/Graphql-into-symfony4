<?php
namespace App\State;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
class AppState implements \JsonSerializable {
    public $fetchMore = false;
    public $sortBy = false;
    public $selectedName = false;
    public $products = [];
    public function jsonSerialize() {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        return $serializer->serialize($this, 'json');
    }
    /**
     * @return string
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }
    /**
     * @param string $sortBy
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
    }
    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @param array $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }
    /**
     * @return bool
     */
    public function isSelectedName()
    {
        return $this->isSelectedName();
    }
    /**
     * @param bool $selectedName
     */
    public function setSelectedName($selectedName)
    {
        $this->selectedName = $selectedName;
    }
    /**
     * @return bool
     */
    public function isFetchMore()
    {
        return $this->fetchMore;
    }
    /**
     * @param bool $fetchMore
     */
    public function setFetchMore($fetchMore)
    {
        $this->fetchMore = $fetchMore;
    }
}
