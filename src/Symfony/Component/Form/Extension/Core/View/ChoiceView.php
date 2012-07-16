<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Extension\Core\View;

/**
 * Represents a choice in templates.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceView
{
    /**
     * The view representation of the choice.
     *
     * @var string
     */
    public $value;

    /**
     * The label displayed to humans.
     *
     * @var string
     */
    public $label;

    /**
     * Creates a new ChoiceView.
     *
     * @param string $value The view representation of the choice.
     * @param string $label The label displayed to humans.
     */
    public function __construct($value, $label)
    {
        $this->value = $value;
        $this->label = $label;
    }
}
