<?php

class Publisher
{

    private int $id;
    private string $namePublisher;
    private string $founderPublisher;
    private string $countryPublisher;

    function __construct(int $id = 0, string $namePublisher = '', string $founderPublisher = '', string $countryPublisher = '')
    {
        $this->id = $id;
        $this->namePublisher = $namePublisher;
        $this->founderPublisher = $founderPublisher;
        $this->countryPublisher = $countryPublisher;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNamePublisher(): string
    {
        return $this->namePublisher;
    }

    public function setNamePublisher(string $namePublisher): void
    {
        $this->namePublisher = $namePublisher;
    }

    public function getFounderPublisher(): string
    {
        return $this->founderPublisher;
    }

    public function setFounderPublisher(string $founderPublisher): void
    {
        $this->founderPublisher = $founderPublisher;
    }

    public function getCountryPublisher(): string
    {
        return $this->countryPublisher;
    }

    public function setCountryPublisher(string $countryPublisher): void
    {
        $this->countryPublisher = $countryPublisher;
    }
}
