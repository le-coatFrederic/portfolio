package online.fredinfo.portfolio.domain.usecases.CompanyCRUD;

import online.fredinfo.portfolio.domain.entities.Company;
import online.fredinfo.portfolio.domain.entities.CompanyRepository;

import java.util.UUID;

public class DeleteCompanyUseCase {
    private final CompanyRepository companyRepository;

    public DeleteCompanyUseCase(CompanyRepository companyRepository) {
        this.companyRepository = companyRepository;
    }

    public CompanyRepository getCompanyRepository() {
        return companyRepository;
    }

    public void execute(Company company) {
        this.companyRepository.delete(company);
    }

    public void execute(UUID companyId) {
        this.companyRepository.delete(companyId);
    }
}
