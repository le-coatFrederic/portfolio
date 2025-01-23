package online.fredinfo.portfolio.domain.usecases.CompanyCRUD;

import online.fredinfo.portfolio.domain.entities.Company;
import online.fredinfo.portfolio.domain.entities.CompanyRepository;

public class SaveCompanyUseCase {
    private final CompanyRepository companyRepository;

    public SaveCompanyUseCase(CompanyRepository companyRepository) {
        this.companyRepository = companyRepository;
    }

    public CompanyRepository getCompanyRepository() {
        return companyRepository;
    }

    public Company execute(Company company) {
        return companyRepository.save(company);
    }
}
