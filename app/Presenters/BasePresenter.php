<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class BasePresenter extends Presenter
{
    public function createdAt()
    {
        if (!$this->entity->created_at) {
            return '';
        }

        return $this->entity->created_at->format('d/m/Y g:ia');
    }

    public function pluckNames($entity, $separator)
    {
        if ($entity) {
            return implode($separator, $entity->pluck('name')->toArray());
        }

        return '';
    }

    public function showNameIfSet($value)
    {
        if ($value) {
            return $value->name;
        }

        return '';
    }

    public function currencyFormat($number)
    {
        if ($number) {
            return number_format($number, 2);
        }

        return '';
    }
}
