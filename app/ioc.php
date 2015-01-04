App::bind('grab', function()
{
  return \GravatarGateway\Gravatar;
});

App::make("UserController")->getGravatar($id);
