package online.fredinfo.portfolio.domain.usecases.CvCRUD;

import online.fredinfo.portfolio.domain.entities.Cv;
import online.fredinfo.portfolio.domain.entities.CvRepository;

import java.util.UUID;

public class DeleteCvUseCase {
    private final CvRepository cvRepository;

    public DeleteCvUseCase(CvRepository cvRepository) {
        this.cvRepository = cvRepository;
    }

    public CvRepository getCvRepository() {
        return cvRepository;
    }

    public void execute(Cv cv) {
        cvRepository.delete(cv);
    }

    public void execute(UUID id) {
        cvRepository.deleteById(id);
    }
}
