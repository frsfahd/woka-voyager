<?php

namespace TCG\Voyager\Actions;


class VerifikasiJasa extends AbstractAction
{
    public function getTitle()
    {
        return $this->data->{'status'} == "verified" ? 'sudah diverifikasi' : 'verifikasi';
    }

    public function getIcon()
    {
        return 'voyager-check-circle';
        return $this->data->{'status'} == "verified" ? 'voyager-check-circle' : 'voyager-check-circle';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        // show or hide the action button, in this case will show for posts model
        return $this->dataType->slug == 'services';
    }

    public function getDefaultRoute()
    {
        // URL for action button when click
        return route('services.verify', array("id" => $this->data->{$this->data->getKeyName()}));
    }
}
