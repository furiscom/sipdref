class ProgramController {
    public function index() {
        $program = Program::all();
        return view('program/index', ['program' => $program]);
    }

    public function create() {
        return view('program/create');
    }

    public function store() {
        $data = $_POST;
        Program::create($data);
        header('Location: /program');
    }

    public function edit($id) {
        $program = Program::find($id);
        return view('program/edit', ['program' => $program]);
    }

    public function update($id) {
        $data = $_POST;
        $program = Program::find($id);
        $program->update($data);
        header('Location: /program');
    }

    public function destroy($id) {
        $program = Program::find($id);
        $program->delete();
        header('Location: /program');
    }
}
