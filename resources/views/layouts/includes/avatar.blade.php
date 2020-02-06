<img src="//gravatar.com/avatar/{{ md5($user->email) }}?d=mm&s=100&size={{ isset($size) ? $size : 70 }}"
     alt="{{ isset($name) ? $name : '' }}" class="{{ isset($classes) ? $classes : '' }}"/>