<?php

namespace App\Pattern\Observer\interface;

interface NewEvent
{
    public function addSubject(SubjectObserver $observer);
    public function removeSubject(SubjectObserver $observer);
    public function newEventSend(string $nameEvent);
    public function notify();
}
