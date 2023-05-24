<?php
namespace Tetra\FastApi\Traits;
trait HasJWT
{
   public static function bootHasJWT()
   {
      static::creating(function ($model) {
         $model->id = (string) Str::uuid();
      });
   }
}
