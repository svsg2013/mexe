<?php

namespace Faker\Provider\el_CY;

class Address extends \Faker\Provider\Address
{
    protected static $citySuffix = array('Λευκωσία', 'Λεμεσός', 'Λάρνακα', 'Πάφος');
    protected static $streetSuffix = array();
    protected static $streetPrefix = array(
        'Όδος', 'Οδός', 'Λεωφόρος',
    );
    protected static $cityFormats = array(
        '{{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{lastName}} {{lastName}}',
        '{{streetPrefix}} Αγίου {{lastName}}',
        '{{streetPrefix}} Βασιλέως {{lastName}}',
    );
    protected static $streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}',
    );
    protected static $buildingNumber = array('##', '#');
    protected static $postcode = array('####');
    protected static $country = array(
        'Ανγκόλα', 'Αζερμπαϊτζάν', 'Αίγυπτος', 'Αιθιοπία', 'Αϊτή', 'Αλβανία', 'Αλγερία', 'Αργεντινή', 'Αρμενία', 'Αυστραλία', 'Αυστρία', 'Αφγανιστάν',
        'Βέλγιο', 'Βενεζουέλα', 'Βιετνάμ', 'Βολιβία', 'Βοσνία και Ερζεγοβίνη', 'Βουλγαρία', 'Βραζιλία',
        'Γαλλία', 'Γερμανία', 'Γεωργία', 'Γροιλανδία',
        'Δανία', 'Δομινικανή Δημοκρατία',
        'Ελβετία', 'Ελλάδα', 'Ερυθραία', 'Εσθονία',
        'ΗΠΑ', 'Ηνωμένο Βασίλειο',
        'Ιαπωνία', 'Ινδία', 'Ινδονησία', 'Ιορδανία', 'Ιράκ', 'Ιράν', 'Ιρλανδία', 'Ισλανδία', 'Ισπανία', 'Ισραήλ', 'Ιταλία',
        'Καζακστάν', 'Καμπότζη', 'Καναδάς', 'Κεντροαφρικανική Δημοκρατία', 'Κένυα', 'Κίνα', 'Κιργιζία', 'Κολομβία', 'Κομόρες', 'Δημοκρατία του Κονγκό', 'Λαϊκή Δημοκρατία του Κονγκό', 'Βόρεια Κορέα', 'Νότια Κορέα', 'Κόστα Ρίκα', 'Κουβέιτ', 'Κροατία', 'Κύπρος',
        'Λάος', 'Λεττονία', 'Λευκορωσία', 'Λίβανος', 'Λιβερία', 'Λιβύη', 'Λιθουανία', 'Λουξεμβούργο',
        'Μαδαγασκάρη', 'Μαλαισία', 'Μάλτα', 'Μαρόκο', 'Μαυρίκιος', 'Μαυριτανία', 'Μαυροβούνιο', 'Μεξικό', 'Μογγολία', 'Μοζαμβίκη', 'Μολδαβία', 'Μονακό', 'Μποτσουάνα', 'Μπουρούντι', 'Μπουτάν',
        'Νέα Ζηλανδία', 'Νεπάλ', 'Νίγηρας', 'Νιγηρία', 'Νικαράγουα', 'Νορβηγία', 'Νότια Αφρική',
        'Ολλανδία', 'Ουγγαρία', 'Ουγκάντα', 'Ουζμπεκιστάν', 'Ουκρανία', 'Ουρουγουάη',
        'Πακιστάν', 'Παλαιστίνη', 'Παναμάς', 'Παραγουάη', 'Περού', 'Πολωνία', 'Πουέρτο Ρίκο', 'Πορτογαλία', 'Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας',
        'Ρουάντα', 'Ρουμανία', 'Ρωσία',
        'Σαμόα', 'Σαουδική Αραβία', 'Σενεγάλη', 'Σερβία', 'Σιγκαπούρη', 'Σλοβακία', 'Σλοβενία', 'Σομαλία', 'Σουαζιλάνδη', 'Σουδάν', 'Σουηδία', 'Σουρινάμ', 'Συρία',
        'Ταϊβάν', 'Ταϊλάνδη', 'Τανζανία', 'Τατζικιστάν', 'Τζαμάικα', 'Τόγκο', 'Τόνγκα', 'Τουβαλού', 'Τουρκία', 'Τουρκμενιστάν', 'Τσεχία', 'Τυνησία',
        'Υεμένη',
        'Φιλιππίνες', 'Φινλανδία',
        'Χιλή',
    );

    /**
     * @example 'Όδος'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }
}
