<?php
class Task 
{
    private $createdTimeStamp; //data i czas utworzenia
    private $resolvedTimeStamp; //data i czas zamknięcia
    private $title; //tytuł (nazwa) zadania
    private $content; // treśc zadania
    private $priority; // priorytet zadania {1=>'Low', 2=>'Mid', 3=>'High'}


    function __construct(string $title, string $content, int $priority = 2)
    {
        $this -> createdTimeStamp = time();
        $this -> resolvedTimeStamp = 0; // zero oznacza sprawę nierozwiazaną
        $this -> title = $title;
        $this -> content = $content;

        if($priority < 1 || $priority > 3)
            $this->priority = 2;
        else 
            $this->priority = $priority;
    }

        function getAsArray()
        {
            $result = array(); //stwórz pustą tablicę
            //zapisz kolejno właściwości zadania do tej tabeli pod indeksami
            //(kluczami) zgodnymi z ich nazwą
            $result['createdTimeStamp'] = $this->createdTimeStamp;
            $result['created'] =  date('d M Y H:i:s', $this->createdTimeStamp);
            $result['resolvedTimeStamp'] = $this->resolvedTimeStamp;
            $result['title'] = $this->title;
            $result['content'] = $this->content;
            $result['priority'] = $this->priority;

            //zwróć tablice
            return $result;
        }
}






?>