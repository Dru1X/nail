@props(['crumbs' => []])

@php
    $crumbs = collect($crumbs);
@endphp

<nav class="flex border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900" aria-label="Breadcrumb">
    <ol role="list" class="mx-auto flex w-full max-w-screen-xl space-x-4 px-4 sm:px-6 lg:px-8">

        @foreach($crumbs as $name => $url)
            @switch($name)
                @case($crumbs->keys()->first())
                    <li class="flex">
                        <div class="flex items-center">
                            <a href="{{$url}}" class="text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-300">
                                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">{{$name}}</span>
                            </a>
                        </div>
                    </li>
                    @break

                @case($crumbs->keys()->last())
                    <li class="flex">
                        <div class="flex items-center">
                            <svg class="h-full w-6 shrink-0 text-gray-200 dark:text-gray-600" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                            </svg>
                            <span class="ml-4 text-sm font-medium text-gray-500 dark:text-gray-400" aria-current="page">
                                {{$name}}
                            </span>
                        </div>
                    </li>
                    @break

                @default
                    <li class="flex">
                        <div class="flex items-center">
                            <svg class="h-full w-6 shrink-0 text-gray-200 dark:text-gray-600" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" aria-hidden="true">
                                <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                            </svg>
                            <a href="{{$url}}" class="ml-4 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
                                {{$name}}
                            </a>
                        </div>
                    </li>
            @endswitch
        @endforeach
    </ol>
</nav>