<?php
/*
         M""""""""`M            dP                     
         Mmmmmm   .M            88                     
         MMMMP  .MMM  dP    dP  88  .dP   .d8888b.     
         MMP  .MMMMM  88    88  88888"    88'  `88     
         M' .MMMMMMM  88.  .88  88  `8b.  88.  .88     
         M         M  `88888P'  dP   `YP  `88888P'     
         MMMMMMMMMMM    -*-  Created by Zuko  -*-      

         * * * * * * * * * * * * * * * * * * * * *     
         * -    - -   F.R.E.E.M.I.N.D   - -    - *     
         * -  Copyright © 2018 (Z) Programing  - *     
         *    -  -  All Rights Reserved  -  -    *     
         * * * * * * * * * * * * * * * * * * * * *     
*//**
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
 * @PROJECT    : The Return
 * @AUTHOR     : Zuko
 * @COPYRIGHT  : © 2018 Zuko
 * @LINK       : http://www.zuko.pw/
 * @FILE       : menuitems.blade.php
 * @CREATED    : 14:05 , 15/Aug/2018
 * @VERSION    : 0.0.1
 * --*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*-- *
 **/
?>

                            {{--<li class="subheader">--}}
                                {{--<span>PAGES</span>--}}
                            {{--</li>--}}

@php
    use \TCG\Voyager\Facades\Voyager;
    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }
@endphp

@foreach ($items as $item)
    @php
        $listItemClass = [];
        $aClasses = [];
        $styles = null;
        $linkAttributes = null;
        $transItem = $item;

        if (Voyager::translatable($item)) {
            $transItem = $item->translate($options->locale);
        }

        $href = $item->link();

        // Current page
        if(url($href) == url()->current()) {
            array_push($listItemClass, 'active');
            array_push($aClasses, 'active');
        }

        $permission = '';
        $hasChildren = false;

        // With Children Attributes
        if(!$item->children->isEmpty())
        {
            foreach($item->children as $child)
            {
                $hasChildren = $hasChildren || Auth::user()->can('browse', $child);

                if(url($child->link()) == url()->current())
                {
                    array_push($listItemClass, 'active');
                }
            }
            if (!$hasChildren) {
                continue;
            }

            $linkAttributes = 'href="#' . $transItem->id .'-dropdown-element" data-toggle="collapse" aria-expanded="'. (in_array('active', $listItemClass) ? 'true' : 'false').'"';
            array_push($listItemClass, 'dropdown');
        }
        else
        {
            $linkAttributes =  'href="' . url($href) .'"';

            if(!Auth::user()->can('browse', $item)) {
                continue;
            }
        }
    @endphp
    <li class="nav-item {{ implode(" ", $listItemClass) }}" role="tab">
        <a @if($hasChildren)
           @php
               $aClasses = ['with-arrow', 'collapsed'];
           @endphp
           data-toggle="collapse" data-target="#collapse-charts" aria-expanded="false" aria-controls="collapse-charts"
           @endif
           class="nav-link ripple {{ implode(" ", $aClasses) }}" {!! $linkAttributes !!} target="{{ $item->target }}">
            <i class="icon {{ $item->icon_class }}"></i>
            <span>{{ $transItem->title }}</span>
        </a>

        @if($hasChildren)
            <ul id="collapse-charts" class='collapse ' role="tabpanel" aria-labelledby="heading-charts" data-children=".nav-item">

                @include('fusehtml.shared.partials.menuitems', ['items' => $item->children, 'options' => $options, 'innerLoop' => true])

            </ul>
        @endif
    </li>
@endforeach
