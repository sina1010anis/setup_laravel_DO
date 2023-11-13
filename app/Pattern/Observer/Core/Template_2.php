<?php

namespace App\Pattern\Observer\Core;
use App\Pattern\Observer\Interface\NewEvent;
use App\Pattern\Observer\Interface\SubjectObserver;

class Template_2 implements NewEvent
{
    public array $observer = [];
    public string $nameEvent;
    public function addSubject(SubjectObserver $observer)
    {
        $this->observer[] = $observer;
    }
    public function removeSubject(SubjectObserver $observer)
    {
        array_pop($this->observer);
    }
    public function newEventSend(string $nameEvent)
    {
        $this->nameEvent = $nameEvent;
        echo 'Create Event ('.$this->nameEvent.') ...! (Version 2)'.'<br>';
        $this->notify();
    }
    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update(__CLASS__, $this->nameEvent);
        }
        echo '-------------------------------'.'<br>';
    }
}
