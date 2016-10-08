<!-- META BEGIN -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="{{ $page->description }}">
<meta name="keywords" content="{{ $page->keywords }}">
<meta name="image" itemprop="image" content="{{ url($page->logo) }}">
<meta name="author" itemprop="author" content="{{ $page->author }}" />

<meta property="og:url"                content="{{ url::full() }}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="{{ $page->title }}" />
<meta property="og:description"        content="{{ $page->title }}" />
<meta property="og:image"              content="{{ url($page->logo) }}" />
<meta property="og:site_name"          content="laravel projem" />

<title>{{ $page->title }}</title>
<!-- META END -->
