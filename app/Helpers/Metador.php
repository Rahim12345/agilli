<?php
    namespace App\Helpers {

        use App\Models\Meta;

        class Metador
        {
            private static $metas = [];

            public static function getMeta ( $key, $default = NULL )
            {
                if ( empty( self::$metas ) )
                {
                    $metas = Meta::all();
//                    dd($metas);
                    foreach ( $metas as $meta )
                    {
                        self::$metas[ $meta->key ] = $meta->value;
                    }
                }

                return array_key_exists( $key, self::$metas ) ? self::$metas[ $key ] : $default;
            }
        }
    }
