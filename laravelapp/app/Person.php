<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'name' => 'required',
    'mail' => 'email',
    'age' => 'integer|min:0|max:150'
  );

  protected static function boot()
  {
    parent::boot();
    static::addGlobalScope(new ScopePerson);
  }

  public function getdata()
  {
    return $this->id .  ': ' . $this->name . '(' . $this->age . ')';
  }

  public function scopeNameEqual($query, $str)
  {
    return $query->where('name', $str);
  }

  public function scopeAgeGreaterThan($query)
  {
    return $query->where('age', '>', 1);
  }

  public function scopeAgeLessThan($query)
  {
    return $query->where('age', '<', 10);
  }

  public function board()
  {
    return $this->hasOne('App\Board');
  }

  public function boards()
  {
    return $this->hasMany('App\Board');
  }
}
