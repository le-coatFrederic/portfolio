package online.fredinfo.portfolio.domain.usecases.CvCRUD;

import online.fredinfo.portfolio.domain.entities.Cv;
import online.fredinfo.portfolio.domain.entities.CvRepository;

public class SaveCvUseCase {
    private final CvRepository cvRepository;

    public SaveCvUseCase(CvRepository cvRepository) {
        this.cvRepository = cvRepository;
    }

    public CvRepository getCvRepository() {
        return cvRepository;
    }

    public Cv execute(Cv cv) {
        return cvRepository.save(cv);
    }
}
