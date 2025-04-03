<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PDFMonkeyController extends Controller
{
    /**
     * Сначала нужно сгенерировать документ.
     * В ответе необходимо получить id.
     */
    public function generate()
    {
        $data = json_decode(
            '{
                "document": {
                    "document_template_id": "0BCB376A-047E-4D03-B580-2F88B3F6198E",
                    "status": "pending",
                    "payload": {
                        "logoUrl": "https://www.theviralist.com/wp-content/uploads/2022/06/Funny-and-Cute-corgi-puppies-videos-compilation-2021-Cutest-corgis-300x200.jpg",
                        "sacrifice": null,
                        "attitudes": null,
                        "doubts": null,
                        "fears": null,
                        "complexes": null,
                        "grievances": null,
                        "emotions": null,
                        "content": null,
                        "illusions": null,
                        "desires": null,
                        "anomalyCounts": {
                            "byType": {
                                "labels": ["Жертвенность", "Сомнения", "Пиратство", "Хламидиоз" ],
                                "counts": [1, 2, 1, 5 ]
                            }
                        }
                    },
                    "meta": {
                        "_filename": "Results.pdf",
                        "clientRef": "selfTestClient"
                    }
                }
            }',
            true
        );

        $response = Http::withHeaders([
            'Authorization' => 'Bearer 4ruHBiZnxRxqYsECyxwg',
            'Content-Type' => 'application/json'
        ])->post('https://api.pdfmonkey.io/api/v1/documents', $data);

        dd($response->json());
    }

    /**
     * Затем, полученный id необходимо отправить на метод document_cards.
     * В ответе необходимо получить public_share_link.
     * Теперь по этому URI можно скачать файл с помощью метода telegramAPISendDocument
     */
    public function fetch()
    {
        $id = 'f85fd373-4bb1-4039-a447-d7a741a43db6';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer 4ruHBiZnxRxqYsECyxwg',
        ])->get('https://api.pdfmonkey.io/api/v1/document_cards/f85fd373-4bb1-4039-a447-d7a741a43db6');

        dd($response->json());
    }

    public function documents()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer 4ruHBiZnxRxqYsECyxwg',
        ])->get('https://api.pdfmonkey.io/api/v1/documents', ['document[0BCB376A-047E-4D03-B580-2F88B3F6198E]']);

        dd($response->json());
    }
}
