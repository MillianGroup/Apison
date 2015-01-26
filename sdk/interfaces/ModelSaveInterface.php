<?php

    /*
       Interface implements beforeSave() and afterSave()
       functions that will trigger action
       before and after saving model
       object.
    */
    interface ModelSaveInterface
    {
        public function beforeSave();
        public function afterSave();
    }

?>