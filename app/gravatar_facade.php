use Illuminate\Support\Facades\Gravatar;

class Gravatar extends Facade {

  protected static function getFacadeAccessor() { return 'gravatar'; }

}
