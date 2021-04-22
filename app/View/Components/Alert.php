<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The bottom alert text.
     *
     * @var string
     */
    public $bText;

    /**
     * The bottom alert emoji.
     *
     * @var string
     */
    public $emoji;


    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $message
     * @param string $bText
     * @param $emoji
     */
    public function __construct($type, $message, $bText = '',$emoji = '')
    {
        $this->type = $type;
        $this->message = $message;
        $this->bText = $bText;
        $this->emoji = $emoji;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
