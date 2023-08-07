<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\MedicoPacienteEntityCreateRequest;
use App\Http\Requests\MedicoPacienteEntityUpdateRequest;
use App\Repositories\MedicoPacienteEntityRepository;
use App\Validators\MedicoPacienteEntityValidator;

/**
 * Class MedicoPacienteEntitiesController.
 *
 * @package namespace App\Http\Controllers;
 */
class MedicoPacienteEntitiesController extends Controller
{
    /**
     * @var MedicoPacienteEntityRepository
     */
    protected $repository;

    /**
     * @var MedicoPacienteEntityValidator
     */
    protected $validator;

    /**
     * MedicoPacienteEntitiesController constructor.
     *
     * @param MedicoPacienteEntityRepository $repository
     * @param MedicoPacienteEntityValidator $validator
     */
    public function __construct(MedicoPacienteEntityRepository $repository, MedicoPacienteEntityValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $medicoPacienteEntities = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $medicoPacienteEntities,
            ]);
        }

        return view('medicoPacienteEntities.index', compact('medicoPacienteEntities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MedicoPacienteEntityCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(MedicoPacienteEntityCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $medicoPacienteEntity = $this->repository->create($request->all());

            $response = [
                'message' => 'MedicoPacienteEntity created.',
                'data'    => $medicoPacienteEntity->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicoPacienteEntity = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $medicoPacienteEntity,
            ]);
        }

        return view('medicoPacienteEntities.show', compact('medicoPacienteEntity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicoPacienteEntity = $this->repository->find($id);

        return view('medicoPacienteEntities.edit', compact('medicoPacienteEntity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MedicoPacienteEntityUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(MedicoPacienteEntityUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $medicoPacienteEntity = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'MedicoPacienteEntity updated.',
                'data'    => $medicoPacienteEntity->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'MedicoPacienteEntity deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'MedicoPacienteEntity deleted.');
    }
}
