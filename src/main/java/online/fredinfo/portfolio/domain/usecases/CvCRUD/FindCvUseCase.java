package online.fredinfo.portfolio.domain.usecases.CvCRUD;

import online.fredinfo.portfolio.domain.entities.Company;
import online.fredinfo.portfolio.domain.entities.Cv;
import online.fredinfo.portfolio.domain.entities.CvRepository;
import online.fredinfo.portfolio.domain.entities.Identity;

import java.util.List;
import java.util.UUID;

public class FindCvUseCase {
    private final CvRepository cvRepository;

    public FindCvUseCase(CvRepository cvRepository) {
        this.cvRepository = cvRepository;
    }

    public CvRepository getCvRepository() {
        return cvRepository;
    }

    public Cv execute(UUID id) {
        return this.cvRepository.findById(id);
    }

    public List<Cv> execute() {
        return this.cvRepository.findAll();
    }

    public List<Cv> execute(Identity user) {
        return this.cvRepository.findByUser(user);
    }

    public List<Cv> executeFindByUserId(UUID identityId) {
        return this.cvRepository.findByUserId(identityId);
    }

    public List<Cv> execute(String title) {
        return this.cvRepository.findByTitle(title);
    }

    public List<Cv> execute(Company company) {
        return this.cvRepository.findByCompany(company);
    }

    public List<Cv> executeFindByCompanyId(UUID companyId) {
        return this.cvRepository.findByCompanyId(companyId);
    }
}
