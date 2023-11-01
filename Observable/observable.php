<?php

abstract class SubscriberObject
{
    abstract function update($newTutorials,$observer);
}

abstract class PublisherObject
{
    abstract function attach(SubscriberObject $subscriber);
    abstract function detach(SubscriberObject $subscriber);
    abstract function notify();
}

class TutorialPublisher extends PublisherObject
{
    private $newTutorials = "";
    private $observers =[];
    public function attach(SubscriberObject $subscriber)
    {
        array_push($this->observers, $subscriber);
    }

    public function detach(SubscriberObject $subscriber)
    {
        foreach( $this->observers as $key => $obs) {
            if($obs == $subscriber) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach( $this->observers as $observer ) {
            $observer->update($this->newTutorials,$observer);
        }
    }

    public function addTutorials($newTutos)
    {
        $this->newTutorials = $newTutos;
        $this->notify();
    }
}

class StudentSubscriber extends SubscriberObject
{
    public $name= "";
    public function update($newTutorials,$observer)
    {
        echo "{$newTutorials} is publish. {$observer->name}<br>";
    }
}

$student1 = new StudentSubscriber();
$student1->name = "Bruce";
$student2 = new StudentSubscriber();
$student2->name = "Billy";
$student3 = new StudentSubscriber();
$student3->name = "Bob";

$tutorialChannel = new TutorialPublisher();
$tutorialChannel->attach($student1);
$tutorialChannel->attach($student2);
$tutorialChannel->attach($student3);

$tutorialChannel->addTutorials("Laravel Tutorial 1");
echo "<hr>";
$tutorialChannel->detach($student1);
$tutorialChannel->addTutorials("Laravel Tutorial 2");

?>