<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sprachzeilen für die Validierung
    |--------------------------------------------------------------------------
    |
    | Die folgenden Sprachzeilen enthalten die Standard-Fehlermeldungen, die von
    | der Validator-Klasse verwendet werden. Einige dieser Regeln haben mehrere Versionen,
    | wie z.B. die Größenregeln. Sie können jede dieser Nachrichten hier anpassen.
    |
    */

    'accepted' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss akzeptiert werden.',
    'accepted_if' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige URL sein.',
    'after' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Datum nach dem :date sein.',
    'after_or_equal' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Datum nach oder gleich dem :date sein.',
    'alpha' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Array sein.',
    'ascii' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nur alphanumerische Zeichen und Symbole mit einem Byte enthalten.',
    'before' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Datum vor dem :date sein.',
    'before_or_equal' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Datum vor oder gleich dem :date sein.',
    'between' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss zwischen :min und :max Elemente enthalten.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss zwischen :min und :max Kilobytes groß sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss zwischen :min und :max liegen.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss zwischen :min und :max Zeichen lang sein.',
    ],
    'boolean' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss wahr oder falsch sein.',
    'can' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld enthält einen nicht autorisierten Wert.',
    'confirmed' => 'Die Bestätigung für das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld stimmt nicht überein.',
    'contains' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld fehlt ein erforderlicher Wert.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein gültiges Datum sein.',
    'date_equals' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Datum gleich :date sein.',
    'date_format' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss dem Format :format entsprechen.',
    'decimal' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss :decimal Dezimalstellen haben.',
    'declined' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss abgelehnt werden.',
    'declined_if' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss abgelehnt werden, wenn :other :value ist.',
    'different' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld und :other müssen unterschiedlich sein.',
    'digits' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss :digits Ziffern lang sein.',
    'digits_between' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss zwischen :min und :max Ziffern lang sein.',
    'dimensions' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld hat ungültige Bildabmessungen.',
    'distinct' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld hat einen doppelten Wert.',
    'doesnt_end_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht mit einem der folgenden enden: :values.',
    'doesnt_start_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht mit einem der folgenden beginnen: :values.',
    'email' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mit einem der folgenden enden: :values.',
    'enum' => 'Das ausgewählte <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> ist ungültig.',
    'exists' => 'Das ausgewählte <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> ist ungültig.',
    'extensions' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine der folgenden Erweiterungen haben: :values.',
    'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Datei sein.',
    'filled' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss einen Wert haben.',
    'gt' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mehr als :value Elemente haben.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss größer als :value Kilobytes sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss größer als :value sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mehr als :value Zeichen haben.',
    ],
    'gte' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :value Elemente haben.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :value Kilobytes sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss größer oder gleich :value sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :value Zeichen haben.',
    ],
    'hex_color' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige hexadezimale Farbe sein.',
    'image' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Bild sein.',
    'in' => 'Das ausgewählte <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> ist ungültig.',
    'in_array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss in :other vorhanden sein.',
    'integer' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Ganzzahl sein.',
    'ip' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige JSON-Zeichenkette sein.',
    'list' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Liste sein.',
    'lowercase' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss in Kleinbuchstaben sein.',
    'lt' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss weniger als :value Elemente haben.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss kleiner als :value Kilobytes sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss kleiner als :value sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss weniger als :value Zeichen haben.',
    ],
    'lte' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht mehr als :value Elemente haben.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss kleiner oder gleich :value Kilobytes sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss kleiner oder gleich :value sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss weniger oder gleich :value Zeichen haben.',
    ],
    'mac_address' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige MAC-Adresse sein.',
    'max' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht mehr als :max Elemente haben.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht größer als :max Kilobytes sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht größer als :max sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht länger als :max Zeichen sein.',
    ],
    'max_digits' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld darf nicht mehr als :max Ziffern haben.',
    'mimes' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Datei vom Typ :values sein.',
    'mimetypes' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Datei vom Typ :values sein.',
    'min' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :min Elemente haben.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :min Kilobytes groß sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :min sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :min Zeichen lang sein.',
    ],
    'min_digits' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens :min Ziffern haben.',
    'missing' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss fehlen.',
    'missing_if' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss fehlen, wenn :other :value ist.',
    'missing_unless' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss fehlen, außer wenn :other :value ist.',
    'missing_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss fehlen, wenn :values vorhanden ist.',
    'missing_with_all' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss fehlen, wenn :values vorhanden sind.',
    'multiple_of' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss ein Vielfaches von :value sein.',
    'not_in' => 'Das ausgewählte <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> ist ungültig.',
    'not_regex' => 'Das Format des <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feldes ist ungültig.',
    'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Zahl sein.',
    'password' => [
        'letters' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens einen Groß- und einen Kleinbuchstaben enthalten.',
        'numbers' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mindestens ein Sonderzeichen enthalten.',
        'uncompromised' => 'Das angegebene <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> ist in einem Datenleck aufgetaucht. Bitte wählen Sie ein anderes <span style="font-weight: bold; text-transform: capitalize;">:attribute</span>.',
    ],
    'present' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss vorhanden sein.',
    'present_if' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss vorhanden sein, wenn :other :value ist.',
    'present_unless' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss vorhanden sein, außer wenn :other :value ist.',
    'present_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss vorhanden sein, wenn :values vorhanden ist.',
    'present_with_all' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss vorhanden sein, wenn :values vorhanden sind.',
    'prohibited' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist verboten.',
    'prohibited_if' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist verboten, wenn :other :value ist.',
    'prohibited_unless' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist verboten, außer wenn :other in :values ist.',
    'prohibits' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld verbietet das Vorhandensein von :other.',
    'regex' => 'Das Format des <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feldes ist ungültig.',
    'required' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich.',
    'required_array_keys' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss Einträge für :values enthalten.',
    'required_if' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn :other :value ist.',
    'required_if_accepted' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn :other akzeptiert wird.',
    'required_if_declined' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn :other abgelehnt wird.',
    'required_unless' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, außer :other ist in :values.',
    'required_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn alle :values vorhanden sind.',
    'required_without' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld ist erforderlich, wenn keines von :values vorhanden ist.',
    'same' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mit :other übereinstimmen.',
    'size' => [
        'array' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss :size Elemente enthalten.',
        'file' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss :size Kilobytes groß sein.',
        'numeric' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss :size sein.',
        'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss :size Zeichen lang sein.',
    ],
    'starts_with' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss mit einem der folgenden beginnen: :values.',
    'string' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine Zeichenkette sein.',
    'timezone' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige Zeitzone sein.',
    'unique' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> ist bereits vergeben.',
    'uploaded' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> konnte nicht hochgeladen werden.',
    'uppercase' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss in Großbuchstaben geschrieben sein.',
    'url' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige URL sein.',
    'ulid' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige ULID sein.',
    'uuid' => 'Das <span style="font-weight: bold; text-transform: capitalize;">:attribute</span> Feld muss eine gültige UUID sein.',

    /*
    |--------------------------------------------------------------------------
    | Benutzerdefinierte Validierungs-Sprachzeilen
    |--------------------------------------------------------------------------
    |
    | Hier können Sie benutzerdefinierte Validierungsmeldungen für Attribute
    | unter Verwendung der Konvention "attribute.rule" für die Benennung der Zeilen angeben.
    | Dies erleichtert es, spezifische benutzerdefinierte Sprachzeilen für eine gegebene Attributregel zu setzen.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Benutzerdefinierte Validierungsattribute
    |--------------------------------------------------------------------------
    |
    | Die folgenden Sprachzeilen werden verwendet, um unseren Attributplatzhalter
    | mit etwas Leserfreundlicherem wie "E-Mail-Adresse" anstelle von "email" zu ersetzen.
    | Dies hilft einfach, unsere Nachricht ausdrucksstärker zu gestalten.
    |
    */

    'attributes' => [],
];
