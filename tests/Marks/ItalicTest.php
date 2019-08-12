<?php

namespace Scrumpy\HtmlToProseMirror\Test\Nodes;

use Scrumpy\HtmlToProseMirror\Renderer;
use Scrumpy\HtmlToProseMirror\Test\TestCase;

class ItalicTest extends TestCase
{
    /** @test */
    public function i_and_em_gets_rendered_correctly()
    {
        $html = '<p><i>Example text using i</i> and <em>some example text using em</em></p>';

        $json = [
            'type'    => 'doc',
            'content' => [
                [
                    'type'    => 'paragraph',
                    'content' => [
                        [
                            'type'  => 'text',
                            'text'  => 'Example text using i',
                            'marks' => [
                                [
                                    'type' => 'italic',
                                ],
                            ],
                        ],
                        [
                            'type' => 'text',
                            'text' => ' and ',
                        ],
                        [
                            'type'  => 'text',
                            'text'  => 'some example text using em',
                            'marks' => [
                                [
                                    'type' => 'italic',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $this->assertEquals($json, (new Renderer)->render($html));
    }
}
