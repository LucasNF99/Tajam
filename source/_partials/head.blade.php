<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="shortcut icon" href="{{ $page->baseUrl }}/assets/images/favicon.png" type="image/png" />
<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
<title>{{ $page->title }}</title>
<meta name="Description" content="{{ $page->description }}">


<meta property="og:title" content="{{ $page->share->title }}">
<meta property="og:description" content="{{ $page->share->description }}">
<meta property="og:url" content="{{ $page->baseUrl }}">
<meta property="og:image" content="{{ $page->baseUrl }}/assets/images/{{ $page->share->image }}.png">
<meta name="twitter:card" value="{{ $page->baseUrl }}/assets/images/{{ $page->share->image }}.png">