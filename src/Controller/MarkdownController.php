<?php

namespace App\Controller;

use cebe\markdown\GithubMarkdown;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Aliases\Aliases;

class MarkdownController extends AbstractController
{
    protected function name(): string
    {
        return 'markdown';
    }

    public function content(ServerRequestInterface $request, Aliases $aliases): ResponseInterface
    {
        $response = $this->responseFactory->createResponse();

        $name = $request->getAttribute('name');

        $content = $this->renderMarkdownFile($aliases->get('@content/' . $name));

        if ($content === null) {
            $response->getBody()->write('Страница не найдена');
            return $response->withStatus(404);
        }

        return $this->render(
            'content',
            [
                'csrf' => $request->getAttribute('csrf_token'),
                'content' => $content,
            ]
        );
    }

    private function renderMarkdownFile(string $path): ?string
    {
        if (!file_exists($path)) {
            return null;
        }

        return (new GithubMarkdown())->parse(file_get_contents($path));
    }
}
