use InvalidArgumentException;

class ListController extends AbstractActionController
{
    /* ... */

public function detailAction()
{
    $id = $this->params()->fromRoute('id');

    try {
        $post = $this->postRepository->findPost($id);
    } catch (\InvalidArgumentException $ex) {
        return $this->redirect()->toRoute('blog');
    }

    return new ViewModel([
        'post' => $post,
    ]);
}
}